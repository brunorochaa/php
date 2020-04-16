Vue.component('product-details', {
    props: {
      details: {
        type: Array,
        required: true
      }
    },
    template: `
      <ul>
        <li v-for="detail in details">{{ detail }}</li>
      </ul>
    `
})

Vue.component('product', {
    props: {
        premium: {
            type: Boolean,
            required: true
        }
    },
    template: `
        <div class="product">
        <div class="product-image">
            <img v-bind:src="image"/>
        </div>
        <div class="product-info">
            <h1>{{ title }}</h1>
            <p>{{ description }}</p>
            <a :href="link" target="_blank">Outros produtos como esse</a>
            <p v-if="inStock">Em Estoque</p>
            <p v-else :class="{ outOfStock: !inStock }">Fora de Estoque</p>
            <span>{{ sale }}</span>
            <p>Valor: {{ shipping }}</p>

            <ul>
                <li v-for="detail in details">{{ detail }}</li>
            </ul>

            <ul>
                <li v-for="size in sizes">{{ size }}</li>
            </ul>

            <div class="color-box" v-for="(variant, index) in variants" :key="variant.variantId" :style="{ backgroundColor: variant.variantColor }" @mouseover="updateProduct(index)">
            </div> 
            
            <button v-on:click="addToCart" :disabled="!inStock" :class="{ disabledButton: !inStock }">Adicionar ao Carrinho</button>
            <button v-on:click="removeFromCart">Remover do Carrinho</button>
        </div>
        <div>
            <p v-if="!reviews.length">There are no reviews yet.</p>
            <ul v-else>
                <li v-for="(review, index) in reviews" :key="index">
                    <p>{{ review.name }}</p>
                    <p>Rating:{{ review.rating }}</p>
                    <p>{{ review.review }}</p>
                </li>
            </ul>
        </div>
         
        <product-tabs :reviews="reviews"></product-tabs>
        
        </div>
    `,
    data() {
        return {
            brand: 'Vue Mastery',
            product: 'Meias',
            description: 'Par de Meias',
            selectedVariant: 0,
            link: 'https://www.amazon.com/s/ref=nb_sb_noss?url=search-alias%3Daps&field-keywords=socks',
            details: ["80% algodão", "20% poliéster", "Unissex"],
            variants: [
                {
                    variantId: 2234,
                    variantColor: "green",
                    variantImage: 'assets/vmSocks-green-onWhite.jpg',
                    variantQuantity: 10
                },
                {
                    variantId: 2235,
                    variantColor: "blue",
                    variantImage: 'assets/vmSocks-blue-onWhite.jpg',
                    variantQuantity: 0
                }
            ],
            sizes: ['P', 'M', 'G', 'GG', 'XXG', 'XXXG'],
            onSale: true,
            reviews: []
        }
    },
    methods: {
        addToCart(){
            this.$emit('add-to-cart', this.variants[this.selectedVariant].variantId)
        },
        updateProduct(index) {  
            this.selectedVariant = index
            console.log(index)
        },
        removeFromCart: function() {
            this.$emit('remove-from-cart', this.variants[this.selectedVariant].variantId)
        },
        addReview(productReview) {
            this.reviews.push(productReview)
        }
    },
    computed: {
        title(){
            return this.brand + ' ' +this.product
        },
        image(){
            return this.variants[this.selectedVariant].variantImage
        },
        inStock(){
            return this.variants[this.selectedVariant].variantQuantity
        },
        sale() {
          if (this.onSale) {
            return this.brand + ' ' + this.product + ' está à venda!'
          } 
            return  this.brand + ' ' + this.product + ' não está à venda'
        },
        shipping(){
            if (this.premium) {
                return "Grátis"
            }
            return 9.99
        },
        mounted() {
            eventBus.$on('review-submitted', productReview => {
                this.reviews.push(productReview)
            })
        }
    }
})

Vue.component('product-review', {
    template: `
      <form class="review-form" @submit.prevent="onSubmit">
      
        <p class="error" v-if="errors.length">
          <b>Corrija os seguintes erro(s):</b>
          <ul>
            <li v-for="error in errors">{{ error }}</li>
          </ul>
        </p>

        <p>
          <label for="name">Nome:</label>
          <input id="name" v-model="name">
        </p>
        
        <p>
          <label for="review">Review:</label>      
          <textarea id="review" v-model="review"></textarea>
        </p>
        
        <p>
          <label for="rating">Nota:</label>
          <select id="rating" v-model.number="rating">
            <option>5</option>
            <option>4</option>
            <option>3</option>
            <option>2</option>
            <option>1</option>
          </select>
        </p>

        <p>Você recomendaria esse produto?</p>
        <label>
          Sim
          <input type="radio" value="Yes" v-model="recommend"/>
        </label>
        <label>
          Não
          <input type="radio" value="No" v-model="recommend"/>
        </label>
            
        <p>
          <input type="submit" value="Enviar">  
        </p>    
      
    </form>
    `,
    data() {
      return {
        name: null,
        review: null,
        rating: null,
        recommend: null,
        errors: []
      }
    },
    methods: {
      onSubmit() {
        this.errors = []
        if(this.name && this.review && this.rating && this.recommend) {
          let productReview = {
            name: this.name,
            review: this.review,
            rating: this.rating,
            recommend: this.recommend
          }
          this.$emit('review-submitted', productReview)
          this.name = null
          this.review = null
          this.rating = null
          this.recommend = null
        } else {
          if(!this.name) this.errors.push("Nome é necessário.")
          if(!this.review) this.errors.push("Review é necessária.")
          if(!this.rating) this.errors.push("Nota é necessária.")
          if(!this.recommend) this.errors.push("Recomendação  é necessária.")
        }
      }
    }
})

Vue.component('product-tabs', {
    props: {
      reviews: {
        type: Array,
        required: false
      }
    },
    template: `
      <div>
      
        <ul>
          <span class="tabs" 
                :class="{ activeTab: selectedTab === tab }"
                v-for="(tab, index) in tabs"
                @click="selectedTab = tab"
                :key="tab"
          >{{ tab }}</span>
        </ul>

        <div v-show="selectedTab === 'Reviews'">
            <p v-if="!reviews.length">There are no reviews yet.</p>
            <ul v-else>
                <li v-for="(review, index) in reviews" :key="index">
                  <p>{{ review.name }}</p>
                  <p>Rating:{{ review.rating }}</p>
                  <p>{{ review.review }}</p>
                </li>
            </ul>
        </div>

        <div v-show="selectedTab === 'Make a Review'">
          <product-review></product-review>
        </div>
    
      </div>
    `,
    data() {
      return {
        tabs: ['Reviews', 'Make a Review'],
        selectedTab: 'Reviews'
      }
    }
})

Vue.component('info-tabs', {
    props: {
        shipping: {
        required: true
    },
    details: {
        type: Array,
        required: true
      }
    },
    template: `
        <div>
        <ul>
          <span class="tabs" 
                :class="{ activeTab: selectedTab === tab }"
                v-for="(tab, index) in tabs"
                @click="selectedTab = tab"
                :key="tab"
          >{{ tab }}</span>
        </ul>

        <div v-show="selectedTab === 'Shipping'">
          <p>{{ shipping }}</p>
        </div>

        <div v-show="selectedTab === 'Details'">
          <ul>
            <li v-for="detail in details">{{ detail }}</li>
          </ul>
        </div>
        </div>
    `,
    data() {
      return {
            tabs: ['Shipping', 'Details'],
            selectedTab: 'Shipping'
        }
    }
})

var app = new Vue ({
    el: '#app',
    data: {
        premium: false,
        cart: []
    },
    methods: {
        updateCart(id){
            this.cart.push(id)
        },
        removeItem(id) {
            for(var i = this.cart.length - 1; i >= 0; i--) {
                if (this.cart[i] === id) {
                    this.cart.splice(i, 1);
                }
            }
        }
    }
})
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

            <div class="color-box" v-for="(variant, index) in variants" :key="variant.variantId" :style="{ backgroundColor: variant.variantColor }" @mouseover="updateProduct(index)">
            </div> 
            
            <button v-on:click="addToCart" :disabled="!inStock" :class="{ disabledButton: !inStock }">Adicionar ao Carrinho</button>
            <button v-on:click="removeFromCart">Remover do Carrinho</button>
        </div>
    `,
    data() {
        return {
            brand: 'Bruago',
            product: 'Insufilm',
            description: 'Película de escurecimento com filtro de 99% dos raios UV',
            selectedVariant: 0,
            link: 'https://www.amazon.com/s/ref=nb_sb_noss?url=search-alias%3Daps&field-keywords=socks',
            details: ['0%', '35%', '95%'],
            variants: [
                {
                    variantId: 2234,
                    variantColor: "#e8f1f0",
                    variantImage: 'assets/1.png',
                    variantQuantity: 100
                },
                {
                    variantId: 2235,
                    variantColor: "#4f5555",
                    variantImage: 'assets/2.png',
                    variantQuantity: 0
                },
                {
                    variantId: 2236,
                    variantColor: "#110f12",
                    variantImage: 'assets/3.png',
                    variantQuantity: 20
                }
            ],
            onSale: true,
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
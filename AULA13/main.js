var vue = new Vue ({
    el: "#aula",
    data: {
        "name" : "Bruno",
        "lastName" : "Rocha",
        "quantity" : 0,
        "note1" : 9.7,
        "note2" : 9.2,
        "situation" : true,
        "languages" : ["Java", "PHP"],
        "people" : [
            {
                "ID":1,
                "name":"zé",
                "image": "./assets/avatar.png",
                "imageDeion":"imagem do zé",
                "email":"ze@gmail.com"
            },
            {
                "ID":2,
                "name":"joao",
                "image": "./assets/avatar.png",
                "imageDeion":"imagem do joao",
                "email":"joao@gmail.com"
            },
            {
                "ID":3,
                "name":"pedro",
                "image": "./assets/avatar.png",
                "imageDeion":"imagem do pedro",
                "email":"pedro@gmail.com"
            }
        ],
        "placeName": "Digite o seu nome",
        "labelEstadoCivil": "Estado Civil",
        "estadoCivil" : ["Solteiro", "Casado", "Divorciado"],
        "labelMes": "Escolha o mês",
        "mes" : [1,2,3,4,5,6,7,8,9,10,11,12]
    },
    computed: {
        fullName() { 
            return this.name + " " + this.lastName;
        },
        average() {
            return (this.note1 + this.note2)/2;
        }
    },
    methods: {
        add() {
           this.quantity++;
        },
        sub(){
            if(this.quantity>0) {
                this.quantity--;
            }
        }
    },
});
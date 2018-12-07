const vm = new Vue({

    el: "#app",
    data:{
        car: []
    },
    methods:{
        getData(){
            let targetURL = "/database/connect.php?car=all";
            fetch(targetURL) 
            .then(res => res.json()) 
            .then(data => {
                console.log(data);
                this.car = data;
            })
            .catch(function(error) {
            console.log(error);
            });
        },

        testConnect(){
            console.log("vue is working!");
        }
    }

});
var APP = new Vue ({
    el: "#app",
    data : {
        albums: [],
        authors :[]
    },

    methods: {
        update(search) {
            axios.get('data.php', {
                    params: {
                        "author": search
                    }
                })
                .then(response => this.albums = response.data)
        }
    },

    mounted: function() {
        axios.get('data.php?author=all')
        .then(response =>{
          this.albums = response.data;
          for(i=0;i<this.albums.length;i++){
            this.authors.push(this.albums[i].author);
          }
         });
    }
})

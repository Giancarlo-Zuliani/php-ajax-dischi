var app = new Vue ({
    el: "#app",
    data : {
        albums: []
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
        axios.get('data.php?author=all').then(response => this.albums = response.data)
    }
})

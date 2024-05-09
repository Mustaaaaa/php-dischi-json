const { createApp } = Vue

createApp({
    data() {
        return {
            // message: 'Hello vue!',
            songs: [],
        }
    },
    methods: {
        fetchSongs() {
            axios.get('server.php').then((res) => {
                // console.log(res.data)
                this.songs = res.data
                // console.log(this.songs)
            })
        },
    },
    created() {
        this.fetchSongs()
    },
}).mount('#app')
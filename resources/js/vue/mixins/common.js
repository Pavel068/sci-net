export default {
    computed: {
        apiUrl() {
          return process.env.MIX_API_URL;
        },
        isAuth() {
            return true;
        },
    },
}

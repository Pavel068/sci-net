export default {
    computed: {
        apiUrl() {
          return process.env.MIX_API_URL;
        },
        authUserId() {
            return localStorage.getItem('authUserId');
        },
    },
}

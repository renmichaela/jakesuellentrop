module.exports = {
    purge: {
        enabled: true,
        content: ["./resources/views/*.php", "./resources/js/components/*.vue"]
    },
    theme: {
        extend: {
            fontFamily: {
                body: ["Nunito", "sans-serif"]
            },
            spacing: {
                128: "32em"
            }
        }
    },
    variants: {},
    plugins: []
};

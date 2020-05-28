module.exports = {
    purge: {
        enabled: true,
        content: ["./resources/views/*.php", "./resources/js/components/*.vue"]
    },
    theme: {
        extend: {
            spacing: {
                128: "32em"
            }
        }
    },
    variants: {},
    plugins: []
};

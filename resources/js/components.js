const Vue = require("vue");

const ChatInput = require("./components/ChatInput").default;
const ChatWindow = require("./components/ChatWindow").default;
const FileUpload = require("./components/FileUpload").default;
const Navigation = require("./components/Navigation").default;

Vue.component("chat-input", ChatInput);
Vue.component("chat-window", ChatWindow);
Vue.component("file-upload", FileUpload);
Vue.component("navigation", Navigation);

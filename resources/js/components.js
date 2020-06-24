const Vue = require("vue");

const ChatInput = require("./components/ChatInput").default;
const ChatWindow = require("./components/ChatWindow").default;
const ComponentsContainer = require("./components/ComponentsContainer").default;
const FileUpload = require("./components/FormFields/FileUpload").default;
const LogoutLink = require("./components/LogoutLink").default;
const Navigation = require("./components/Navigation").default;
const ToggleField = require("./components/FormFields/ToggleField").default;

Vue.component("chat-input", ChatInput);
Vue.component("chat-window", ChatWindow);
Vue.component("components-container", ComponentsContainer);
Vue.component("file-upload", FileUpload);
Vue.component("logout-link", LogoutLink);
Vue.component("navigation", Navigation);
Vue.component("toggle-field", ToggleField);

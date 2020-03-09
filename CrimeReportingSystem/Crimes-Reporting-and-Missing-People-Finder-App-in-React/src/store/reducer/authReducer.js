
const InitalState = {
    isLoggedin: false,
    user: {},
    isRegistered: false,
};

const AuthReducer = (state = InitalState, action) => {
    switch (action.type) {
        case "signup":
            return Object.assign(state, { user: action.value, isRegistered: true })

        case "signin":
            return Object.assign(state, { user: action.value, isLoggedin: true })
    
        case "loggedin":
            return Object.assign(state, { user: action.value, isLoggedin: true })
    }
    return state
}
export default AuthReducer
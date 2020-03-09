
const InitalState = {
    crimes: [],
};

const CrimeReducer = (state = InitalState, action) => {
    switch (action.type) {
        case "find":
            return Object.assign(state, { crimes: action.value})
    }
    return state
}

export default CrimeReducer
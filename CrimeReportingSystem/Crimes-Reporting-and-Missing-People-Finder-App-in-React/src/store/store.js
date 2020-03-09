import { createStore, combineReducers } from 'redux'
// import logger from 'redux-logger'

import AuthReducer from './reducer/authReducer'
import MissingPeopleReducer from './reducer/missingPeopleReducer'
import CrimeReducer from './reducer/crimeReducer'

export const rootReducer = createStore(combineReducers({
        AuthReducer,
        MissingPeopleReducer,
        CrimeReducer
           })
           )

export let store = rootReducer;
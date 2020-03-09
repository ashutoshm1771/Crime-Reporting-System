import React from 'react';
import ReactDOM from 'react-dom';
import { Provider } from 'react-redux'
import { store } from './store/store'
import App from './App';
import Home from './components/home';
import SignUp from './components/signup';
import Login from './components/login';
import MuiThemeProvider from 'material-ui/styles/MuiThemeProvider';
import injectTapEventPlugin from 'react-tap-event-plugin';
import Logout from "./components/logout"
import HeaderOuter from "./components/HeaderOuter"
import HeaderInner from "./components/HeaderInner"
import Thankyou from "./components/Thankyou"
import Crimes from "./components/Crimes"
import MissingPeople from "./components/MissingPeople"
import ComplaintsList from "./components/ComplaintsList"
import ComplaintsParent from "./components/ComplaintsParent"
import RegisterComplaint from "./components/RegisterComplaint"
import RegisterCrime from "./components/RegisterCrime"
import CrimeParent from "./components/crimeParent"
import RegisterMissingPeople from "./components/RegisterMissingpeople"
import MissingPeopleParent from "./components/MissingPeopleParent"

injectTapEventPlugin();

import { Router, Route, hashHistory, IndexRoute, browserHistory } from 'react-router';

ReactDOM.render((
    <MuiThemeProvider>
        <Provider store={store}>
            <Router history={browserHistory}>
                
                <Route path="/" component={HeaderOuter}>
                <Route path="login" component={Login}></Route>
                <Route path="signup" component={SignUp}></Route>
                    <Route path="crimes" component={Crimes} />
                    <Route path="missingpeople" component={MissingPeople} />
                    <IndexRoute component={MissingPeople}> </IndexRoute>
                </Route>
                
                <Route path="/home" component={HeaderInner}>
                <Route component={Home}> </Route>
                <IndexRoute component={MissingPeopleParent}> </IndexRoute>

                <Route path="crimeparent" component={CrimeParent} >
                <IndexRoute component={Crimes}> </IndexRoute>
                <Route path="crimes" component={Crimes} />
                <Route path="registercrime" component={RegisterCrime} />
                </Route>

                <Route path="missingpeopleparent" component={MissingPeopleParent} >
                <IndexRoute component={MissingPeople}> </IndexRoute>
                <Route path="missingpeople" component={MissingPeople} />
                <Route path="registermissingpeople" component={RegisterMissingPeople} />
                </Route>

                <Route path="complaintsparent" component={ComplaintsParent} >
                <IndexRoute component={ComplaintsList}> </IndexRoute>
                <Route path="complaintslist" component={ComplaintsList} />
                <Route path="registercomplaint" component={RegisterComplaint} />
                </Route>

                <Route path="missingpeople" component={MissingPeople} />
                <Route path="logout" component={Login}></Route>
                <Route path="complaints" component={ComplaintsParent}></Route>
                
                </Route>

            </Router>
        </Provider>
    </MuiThemeProvider>
),
    document.getElementById('root')
);

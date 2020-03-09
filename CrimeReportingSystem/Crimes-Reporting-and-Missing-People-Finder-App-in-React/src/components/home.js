import React, { Component } from 'react';
import { Loggedin } from '../store/action/auth'
import { connect } from 'react-redux'
import { Link } from 'react-router';
import {DBfirebase} from "../database/DBfirebase"
// import { List, ListItem } from 'material-ui/List';
import MissingPeopleParent from "./MissingPeopleParent"

class Home extends Component {
    constructor(props) {
        super(props)
        this.state = {
            name: this.props.authReducer.user.fullname
        }
    }

    componentWillMount() {
        let key = localStorage.getItem('currentUser')
        DBfirebase.ref.child(`/users`).on("child_added", (snapshot) => {
            
        })
        DBfirebase.ref.child(`/users/${key}`).on("value", (snapshot) => {
            if (snapshot.val()) {
                this.setState({
                    name: snapshot.val().fullname
                })
                this.props.Loggedin(snapshot.val())
            }
        })
    }
    render() {
        return (
            <div >
                <h1>Welcome {this.state.name}</h1>
                    <br /><br /><br /><br />
                    <div>
                        <center>
                            {this.props.children}
                                           </center>
                    </div>
                    </div>
        );
    }
}
const mapStateToProps = (state) => {
    return {
        authReducer: state
    }
}
const mapDispatchToProps = (dispatch) => {
    return {
        Loggedin: (data) => {
            dispatch(Loggedin(data))
        }
    }
}
export default connect(mapStateToProps, mapDispatchToProps)(Home);
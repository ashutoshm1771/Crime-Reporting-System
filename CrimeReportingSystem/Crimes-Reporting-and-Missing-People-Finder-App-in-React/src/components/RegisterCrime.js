import React, { Component } from 'react'
import { Link, browserHistory } from 'react-router';
import { connect } from 'react-redux'
import RaisedButton from 'material-ui/RaisedButton';
import { DBfirebase } from '../database/DBfirebase'
import { signUp } from '../store/action/auth'
import TextField from 'material-ui/TextField';
import AppBar from 'material-ui/AppBar';
import SelectField from 'material-ui/SelectField';
import MenuItem from 'material-ui/MenuItem';

class RegisterCrime extends Component {
    constructor() {
        super();
        this.state = {
            informerName: '',
            informerMobile: '',
            city: '',
           crime:''
           
        }
        this.submit = this.submit.bind(this);
        this.inputHandler = this.inputHandler.bind(this);
    }
    inputHandler(e) {
        this.setState({
            [e.target.name]: e.target.value
        })
    }
    submit(e) {
        e.preventDefault();
        let multipath = {};
        let crime = {
            informerName: this.state.informerName,
            informerMobile: this.state.informerMobile,
            city: this.state.city,
           crime: this.state.crime,
        }
        console.log(crime)
        DBfirebase.refCrime.push(crime);
        browserHistory.push('/home/crimeparent/crimes')

    }
    render() {
        return (
            <div ><center>
                <CrimeForm signUpState={this.state} _inputHandler={this.inputHandler} _submit={this.submit} />
            </center>
            </div>
        );
    }
}

RegisterCrime.contextTypes = {
    router: React.PropTypes.object.isRequired
}


class CrimeForm extends React.Component {

    render() {
        
        return (
            <div >
              
                <h1>Register a Crime</h1>
                <form onSubmit={this.props._submit} >
                    <TextField
                        hintText="Full Name"
                        name="informerName"
                        value={this.props.signUpState.informerName}
                     floatingLabelText="Full Name"
                        onChange={this.props._inputHandler}
                        /><br />

                    <TextField
                        type="text"
                        hintText="informerMobile"
                        name="informerMobile"
                        value={this.props.signUpState.informerMobile}
                       floatingLabelText="informerMobile"
                        onChange={this.props._inputHandler}
                        /><br /><br />

                    <select name="city"
                        value={this.props.signUpState.city}
                        required
                        onChange={this.props._inputHandler}>
                        <option>City   </option>
                        <option value="California">California</option>
                        <option value="Florida">Florida</option>
                        <option value="New Jersey">New Jersey</option>
                        <option value="New York">New York</option>
                        <option value="Ohio">Ohio</option>
                        <option value="Texas">Texas</option>
                        <option value="Washington">Washington</option>
                        <option value="Los Angeles">Los Angeles</option>
                        <option value="New Mexico">New Mexico</option>
                        <option value="Oxford">Oxford</option>
                    </select><br /><br />
                        <TextField
                        type="text"
                        hintText="Crime"
                        name="crime"
                        value={this.props.signUpState.crime}
                        floatingLabelText="Crime"
                        onChange={this.props._inputHandler}
                        /><br />
                        <br />

                 <RaisedButton type="submit" label="Register a Crime" primary={false} secondary={true} /> <br /><br />
                </form>
                
            </div>
        )
    }
}
// CrimeForm.PropTypes = {
//     _inputHandler: React.PropTypes.func.isRequired,
//     _submit: React.PropTypes.func.isRequired

// }

export default RegisterCrime;

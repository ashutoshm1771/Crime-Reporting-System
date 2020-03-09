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

class ReportMissingPerson extends Component {
    constructor() {
        super();
        this.state = {
            informerName: '',
            informerMobile: '',
            city: '',
            missingDetails:'',
            missingPersonName:'',
            age:'',
            gender:'',
           
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
        let missingPerson = {
            informerName: this.state.informerName,
            informerMobile: this.state.informerMobile,
            city: this.state.city,
            missingDetails: this.state.missingDetails,
            missingPersonName: this.state.missingPersonName,
            age: this.state.age,
            gender: this.state.gender,
        }
        console.log(missingPerson)
       // DBfirebase.refMissing.push({missingPerson});
        DBfirebase.ref.child('missingPeople').push(missingPerson);
        browserHistory.push('/home/missingpeopleparent/missingpeople')

    }
    render() {
        return (
            <div ><center>
                <MissingPersonForm signUpState={this.state} _inputHandler={this.inputHandler} _submit={this.submit} />
            </center>
            </div>
        );
    }
}

ReportMissingPerson.contextTypes = {
    router: React.PropTypes.object.isRequired
}


class MissingPersonForm extends React.Component {

    render() {
        
        return (
            <div >
              
                <h1>Report Missing Person</h1>
                <form onSubmit={this.props._submit} >
                    <TextField
                        hintText="Missing Person Full Name"
                        name="missingPersonName"
                        value={this.props.signUpState.missingPersonName}
                     floatingLabelText="Missing Person Full Name"
                        onChange={this.props._inputHandler}
                        /><br /><br />

                    

                    <select name="city"
                        value={this.props.signUpState.city}
                        required
                        onChange={this.props._inputHandler}>
                        <option>Missing City   </option>
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
                     <select name="gender"
                        value={this.props.signUpState.gender}
                        required
                        onChange={this.props._inputHandler}>
                        <option>Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                      
                    </select><br /><br />
                     <TextField
                        type="number"
                        hintText="Missed Person Age"
                        name="age"
                        value={this.props.signUpState.age}
                        floatingLabelText="Missed Person Age"
                        onChange={this.props._inputHandler}
                        /><br />
                        <br />

                        <TextField
                        type="text"
                        hintText="Missing Details"
                        name="missingDetails"
                        value={this.props.signUpState.missingDetails}
                        floatingLabelText="Missing Details"
                        onChange={this.props._inputHandler}
                        /><br />
                        <br />

                        <TextField
                        hintText="Informer Full Name"
                        name="informerName"
                        value={this.props.signUpState.informerName}
                     floatingLabelText="Informer Full Name"
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

                 <RaisedButton type="submit" label="Report Missed Person" primary={false} secondary={true} /> <br /><br />
                </form>
                
            </div>
        )
    }
}
// MissingPersonForm.PropTypes = {
//     _inputHandler: React.PropTypes.func.isRequired,
//     _submit: React.PropTypes.func.isRequired

// }

export default ReportMissingPerson;

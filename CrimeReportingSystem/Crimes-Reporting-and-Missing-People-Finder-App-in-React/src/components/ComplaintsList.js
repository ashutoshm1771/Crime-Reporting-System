import * as firebase from 'firebase';
import React, { Component } from 'react';
// import logo from './logo.svg';
// import './App.css';
import {Table, TableBody, TableHeader, TableHeaderColumn, TableRow, TableRowColumn} from 'material-ui/Table';
import Paper from 'material-ui/Paper';
import { Search } from '../store/action/auth'
import { connect } from 'react-redux'

const style = {
  //height: 100,
  //width: 100,
  margin: 20,
 // textAlign: 'center',
  // display: 'inline-block',
    display: 'block-inline',
  height: 'auto',
  width: 'auto',
  padding: 20,
  backgroundColor: '#C0CA33'
  
};

class Crimes extends Component {
    constructor(){
        super();

        this.state = {
           // crimeList: [],
              arr: []
        }
    }
    
   


    componentWillMount(){
       let _self = this;
       
        let ref = firebase.database().ref().child('/crimeList');
        _self.arr = [];
       
          ref.once('value', function (snapshot) {
     
            snapshot.forEach(childSnapshot => {

                _self.arr.push(childSnapshot.val())
                console.log("arr", _self.arr)         
            })
            _self.props.serachCrimes(_self.arr)
            _self.setState({
                arr: _self.props.storeReducer.crimes
                
            })
        });
    }
    
    render() {
        return (
            <div >  


                <center>
                     <h1>Complaints List</h1>
                    <br /><br />


                  
</ center>
{console.log("this.state.arr", this.state.arr)}
               {this.state.arr.map((c, i) => {
                    return(
                      <div>
                    
                        <Paper style={style} zDepth={5} > 
                        >Name: {c.informerName} <br />
                        >City: {c.city}<br /> 
                        >Crime: {c.crime}<br />
                        >Informer Mobile: {c.informerMobile}<br />
                        </Paper>                     
                     </div>
  )
                })
                  
                }

            </div>
        );
    }
}

const mapStateToProps = (state) => { 
     console.log(state.CrimeReducer)
    return {
        storeReducer: state.CrimeReducer
    }
}
const mapDispatchToProps = (dispatch) => {
        return {
        serachCrimes: (data) => {
            console.log(data)
            dispatch(Search(data))
        }
    }
}

export default connect(mapStateToProps, mapDispatchToProps)(Crimes);


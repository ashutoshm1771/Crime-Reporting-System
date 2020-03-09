import React from "react"
import AppBar from 'material-ui/AppBar';
import RaisedButton from 'material-ui/RaisedButton';
import {Link, browserHistory} from "react-router"
import * as firebase from "firebase"
import Crimes from "./Crimes"

var styles = {
  appBar: {
    backgroundColor: '#C62828',
   // backgroundColor: '#3F51B5',
     minHeight:50,
     //height:300
  },
  
  buttonInAppBar : {
  margin: 12,
  backgroundColor: "transparent"
},
}

export default class CrimesParent extends React.Component {


    render() {
        return (
            <div>
                <AppBar
                style={styles.appBar}
               
                    title="Crimes Reports"
                   // iconClassNameRight="muidocs-icon-navigation-expand-more"
                >
                 <Link to="/home/crimeparent/registercrime" >   <RaisedButton style={styles.buttonInAppBar} label="Register a Crime" primary={false} /></Link>
                  <Link to="/home/crimeparent/crimes" >   <RaisedButton style={styles.buttonInAppBar} label="View Crimes" primary={false} /></Link>
                     
                </AppBar>
               
                {this.props.children}
            </div>
        )
    }
}


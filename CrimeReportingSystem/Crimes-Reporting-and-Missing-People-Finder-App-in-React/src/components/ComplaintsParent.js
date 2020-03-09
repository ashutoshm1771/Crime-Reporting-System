import React from "react"
import AppBar from 'material-ui/AppBar';
import RaisedButton from 'material-ui/RaisedButton';
import {Link, browserHistory} from "react-router"
import * as firebase from "firebase"
import ComplanitsList from "./ComplaintsList"

var styles = {
  appBar: {
    backgroundColor: '#AFB42B',
   // backgroundColor: '#3F51B5',
     minHeight:50,
     //height:300
  },
  
  buttonInAppBar : {
  margin: 12,
  backgroundColor: "transparent"
},
}

export default class ComplaintsParent extends React.Component {


    render() {
        return (
            <div>
                <AppBar
                style={styles.appBar}
               
                    title="Complaints"
                   // iconClassNameRight="muidocs-icon-navigation-expand-more"
                >
                 <Link to="/home/complaintsparent/registercomplaint" >   <RaisedButton style={styles.buttonInAppBar} label="Register a Complaint" primary={false} /></Link>
                  <Link to="/home/complaintsparent/complaintslist" >   <RaisedButton style={styles.buttonInAppBar} label="View Complaints" primary={false} /></Link>
                     
                </AppBar>
               
                {this.props.children}
            </div>
        )
    }
}


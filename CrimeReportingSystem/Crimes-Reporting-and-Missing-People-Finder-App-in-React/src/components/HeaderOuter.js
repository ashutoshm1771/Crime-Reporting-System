import React from "react"
import AppBar from 'material-ui/AppBar';
import RaisedButton from 'material-ui/RaisedButton';
import {Link, browserHistory} from "react-router"
import * as firebase from "firebase"

var styles = {
  appBar: {
   // backgroundColor: '#009688',
    backgroundColor: '#5C6BC0',
     minHeight:50,
     //height:300
  },
  
  buttonInAppBar : {
  margin: 12,
  backgroundColor: "transparent"
},
}

export default class HeaderOuter extends React.Component {
    render() {
        return (
            <div>
                <AppBar
                style={styles.appBar}
                    title="Report Crimes App"
                    iconClassNameRight="muidocs-icon-navigation-expand-more"
                >
                
                <Link to="missingpeople" >   <RaisedButton style={styles.buttonInAppBar} label="Missing People" primary={false} /></Link>
                      <Link to="crimes" >   <RaisedButton style={styles.buttonInAppBar} label="Crimes" primary={false} /></Link>
                       <Link to="signup" >  <RaisedButton style={styles.buttonInAppBar} label="Sign Up" primary={false} /></Link>
                       <Link to="login" >  <RaisedButton style={styles.buttonInAppBar} label="Login" primary={false} /></Link>
                </AppBar>

                {this.props.children}
            </div>
        )
    }
}


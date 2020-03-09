import React, { Component } from 'react';
import './App.css';
import HeaderOuter from "./components/HeaderOuter"


class App extends Component {
    render() {
        return (
            <div>
<HeaderOuter />
                <div>
                    
                    {this.props.children}
                    
                </div>
            </div>
        );
    }
}

export default App;
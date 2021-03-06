import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class Person extends Component {
    constructor(props) {
        super(props);

        this.state = {
            person: []
        };
    }

    async fetchPerson() {
        fetch('https://franksiderio.me/api/person/1').then((response) => {
            return response.json();
        }).then((json) => {
            if(json) {
                this.setState({person: json.person});
            }
        });
    }

    componentDidMount() {
        // TODO: GET THIS WORKING
        //this.fetchPerson();
    }

    render() {
        return (
            <div className="hero-text">
                <h1>Hi, I'm Frank.</h1>
                <h3 className="flavor-text">I am a computer science major at Marist College. I currently reside in the Philadelphia area and I am passionate about all Philly sports. 🦅 🔔 ⚾ 🏒</h3>
            </div>
        )
    }
}

if (document.getElementById('person')) {
    ReactDOM.render(<Person />, document.getElementById('person'));
}

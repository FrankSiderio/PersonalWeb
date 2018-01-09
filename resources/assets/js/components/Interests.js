import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Interest from './Interest';

export default class Interests extends Component {
    constructor() {
        super();

        this.state = {
            interests: []
        };
    }

    async fetchInterests() {
        fetch('http://franksiderio.me:3333/api/interests/1').then((response) => {
            return response.json();
        }).then((json) => {
            if(json) {
                console.log(json.interests);
                this.setState({interests: json.interests});
            }
        });
    }

    componentDidMount() {
        this.fetchInterests();
    }

    render() {
        return (
            <div className="card-container">
                {this.state.interests.map((interest, index) => {
                    return <Interest key={index} title={interest.title} description={interest.description} imagePath={interest.imagePath}/>
                })}
            </div>
        );
    }
}

if (document.getElementById('interests')) {
    ReactDOM.render(<Interests />, document.getElementById('interests'));
}

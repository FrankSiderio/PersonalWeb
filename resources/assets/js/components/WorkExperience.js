import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class WorkExperiences extends Component {
    constructor(props) {
        super(props);
    }

    render() {
        return (
            <div className="work-experience">
                <h1>{this.props.position} at {this.props.company}</h1>
                <p>{this.props.description}</p>
            </div>
        );
    }
}

import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class WorkExperiences extends Component {
    constructor(props) {
        super(props);
    }

    render() {
        return (
            <div className="one-third">
                <img className="image" src={this.props.imagepath}/>

                <div className="one-third-body">
                    <h4>{this.props.position} at {this.props.company}</h4>
                    <p className="description">{this.props.description}</p>
                    <a className="navy-btn btn-component" href="/">Learn More</a>
                </div>
            </div>
        );
    }
}

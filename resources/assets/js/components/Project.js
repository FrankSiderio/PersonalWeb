import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class Project extends Component {
    constructor(props) {
        super(props);
    }

    render() {
        return (
            <div className="one-third">
                <img className="image" src={this.props.imagePath}/>

                <div className="one-third-body">
                    <h4 className="name">{this.props.name}</h4>
                    <p className="description">{this.props.description}</p>
                    <a className="navy-btn btn-component" href="/">Learn More</a>
                </div>
            </div>
        );
    }
}

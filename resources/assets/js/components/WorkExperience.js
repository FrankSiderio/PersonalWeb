import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class WorkExperiences extends Component {
    constructor(props) {
        super(props);
    }

    render() {
        return (
            <div className="one-third">
                <img className="img-responsive" src={this.props.imagePath}/>

                <div className="one-third-body">
                    <h4 className="name">{this.props.position} at {this.props.company}</h4>
                    <p className="description">{this.props.description}</p>
                    <a className="button btn-component" href={'/experience/#' + this.props.company}>Learn More</a>
                </div>
            </div>
        );
    }
}

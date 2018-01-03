import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class Project extends Component {
    constructor(props) {
        super(props);
    }

    render() {
        if(this.props.count % 2 == 0) {
            var cName = "section";
        } else {
            var cName = "dark-section";
        }
        return (
            <div id={this.props.name} className={cName}>
                <div className="container">
                    <div className="left-right">
                        <div className="content">
                            <h2 className="name">{this.props.name}</h2>
                            <p>{this.props.description}</p>
                            <div className="button-container">
                                <a className="button btn-component" target="_blank" href={this.props.url}>See Project</a>
                            </div>
                        </div>

                        <div className="image-container">
                            <img className="img-responsive" src={this.props.imagePath}/>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

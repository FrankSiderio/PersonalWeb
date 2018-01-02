import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import WorkExperience from './WorkExperience';

export default class WorkExperiences extends Component {
    constructor() {
        super();

        this.state = {
            experiences: []
        };
    }

    async fetchExperiences() {
        fetch('http://localhost:3333/api/work/1').then((response) => {
            return response.json();
        }).then((json) => {
            if(json) {
                this.setState({experiences: json.workExperience});
            }
        });
    }

    componentDidMount() {
        this.fetchExperiences();
    }

    render() {
        return (
            <div className="top-section">
                <div className="heading">
                    <h2 className="section-text">A little bit about what I do.</h2>
                </div>
                <div className="rule-of-thirds container">
                    {this.state.experiences.map((exp, index) => {
                        return <WorkExperience key={index} position={exp.position} company={exp.company} description={exp.preview} imagePath={exp.imagePath}/>
                    })}
                </div>
            </div>
        );
    }
}

if (document.getElementById('work-experience')) {
    ReactDOM.render(<WorkExperiences />, document.getElementById('work-experience'));
}

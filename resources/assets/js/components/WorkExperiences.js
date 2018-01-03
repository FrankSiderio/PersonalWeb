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
            <div>
                {this.state.experiences.map((exp, index) => {
                    return <WorkExperience key={index} count={index} position={exp.position} company={exp.company} description={exp.description} imagePath={exp.imagePath} url={exp.url}/>
                })}
            </div>

        );
    }
}

if (document.getElementById('experiences')) {
    ReactDOM.render(<WorkExperiences />, document.getElementById('experiences'));
}

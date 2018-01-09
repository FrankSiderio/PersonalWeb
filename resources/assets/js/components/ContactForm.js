import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import { CookiesProvider, withCookies, Cookies } from 'react-cookie'

export default class ContactForm extends Component {
    constructor(props) {
        super(props);

        this.state = {
            name: "",
            email: "",
            message: ""
        };

        this.handleChange = this.handleChange.bind(this);
        this.handleSubmit = this.handleSubmit.bind(this);
    }

    handleChange(propertyName, event) {
        this.setState({
            [propertyName]: event.target.value
        });
    }

    handleSubmit(event) {
        event.preventDefault();
        fetch('http://franksiderio.me:3333/api/feedback', {
            method: 'POST',
            headers: {
                Accept: 'application/json',
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({
                name: this.state.name,
                email: this.state.email,
                message: this.state.message,
            })
        }).then((response) => {
            if(response.status == 201) {
                ReactDOM.render(
                    <div className="alert alert-success">
                        Thanks for the feedback {this.state.name}!
                        <a href="#" className="close" data-dismiss="alert" aria-label="close">&times;</a>
                    </div>
                    , document.getElementById('status'));


                // Sending an email to myself so I know I got feedback
                fetch('https://franksiderio.me/api/feedback/mail', {
                    method: 'POST',
                    headers: {
                        Accept: 'application/json',
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({
                        message: this.state.message,
                        email: this.state.email,
                    })
                }).then((response) => {
                    if(response.status != 200) {
                        console.log("Failed to send email");
                    }
                })

                // Clearing the input fields
                this.setState({
                    name: "",
                    email: "",
                    message: ""
                });
            }

            // It was a bad request so lets return the errors
            else if(response.status == 400) {
                return (response.json());
            }

            else {
                ReactDOM.render(
                    <div className="alert alert-danger">
                        It looks like something went wrong :(
                        <a href="#" className="close" data-dismiss="alert" aria-label="close">&times;</a>
                    </div>
                    , document.getElementById('status'));
            }

        }).then((json) => {
            if(json) {
                console.log(json.error);
                const errors = json.error;

                for(var i = 0; i < errors.length; i++) {
                    ReactDOM.render(
                        <div className="alert alert-danger">
                            {json.error[i].message}
                            <a href="#" className="close" data-dismiss="alert" aria-label="close">&times;</a>
                        </div>
                        , document.getElementById('status'));
                }
            }
        });
    }

    render() {
        return (
            <form onSubmit={this.handleSubmit}>
                <input type="name" className="form-control" placeholder="Name" value={this.state.name} onChange={this.handleChange.bind(this, 'name')} required/>
                <input type="email" className="form-control" placeholder="Email" value={this.state.email} onChange={this.handleChange.bind(this, 'email')} required/>
                <textarea className="form-control message-box" placeholder="Feedback" value={this.state.message} onChange={this.handleChange.bind(this, 'message')} required></textarea>
                <button type="submit" className="button btn-component">Send</button>
            </form>
        );
    }
}

if (document.getElementById('form')) {
    ReactDOM.render(<ContactForm />, document.getElementById('form'));
}

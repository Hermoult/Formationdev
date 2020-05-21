import React, {Component} from 'react'

const Context = React.createContext();

const reducer =(state, action)=> {
    switch(action.type) {
        case 'DELETE_CONTACT' : 
        return{
            contacts : state.contacts.filter(contact =>
                contact.id !== action.payload)
        }
    }
}

export class Provider extends Component {
    
    state = {
        contacts: [
            {
                id: 1,
                nom: 'John Doe',
                email: 'John@gmail.com',
                tel: "555-555-5555"
            },
            {
                id: 2,
                nom: 'John Doe',
                email: 'John@gmail.com',
                tel: "555-555 -5555"
            },
            {
                id: 3,
                nom: 'John Doe',
                email: 'John@gmail.com',
                tel: "555-555-5555"
            }
        ]
    }

    render() {
        return (
            <Context.Provider value ={this.state}>
                {this.props.children}
            </Context.Provider>
        )
    }
}

export const Consumer = Context.Consumer;
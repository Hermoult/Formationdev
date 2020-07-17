
import React, { Component } from 'react'
import Clavier from './components/Clavier'
import randomint from 'random-int';



export default class App extends Component {

  state = {
    titre : "Le pendu",
    list : ["GYROROUE","ORDINATEUR","SYNTHESE"],
    lettres : "ABCDEFGHIJKLMNOPQRSTUVWXYZ".split(''),
    propose : [],
    motMystere : null,
    motActuel : null,
    vie : null,
    maxVie : 10,
  }

  componentDidMount() {
    this.newGame();
  }

  newGame = () => {
    


    const motMystere = this.state.list[randomint(0,2)];

    this.setState({motMystere});
    const motActuel = motMystere.split('').map(function() {
      return "_" + " "
    })
    this.setState({motActuel,vie:this.state.maxVie, propose:[]});
    
    

  }

  handleClickClavier = (lettres) => {

    const motMystere = this.state.motMystere.split('');
    const motActuel = this.state.motActuel.slice();
    const controlMot = motActuel.slice();
    const propose = this.state.propose.slice();
    var vie = this.state.vie;

    propose.push(lettres);      


    motMystere.map(function(elmt, key) {
      if(elmt === lettres) {
        motActuel[key] = lettres
      } 
    })

    if (motMystere.join() == controlMot.join()) {
      alert("vous avez gagné")
    }else if(motActuel.join('') === controlMot.join('')) {
      vie--;
      if(vie<=0) {
        vie=0;
        alert("Vous avez perdu");
        this.newGame();
      }
    }

    this.setState({motActuel,vie,propose})
  }
  

  render() {
    return (
      <div className="App">
        <h1> {this.state.titre} </h1>
        <h2>Mot à deviner </h2>
        <h3>{this.state.motActuel}</h3>
      <Clavier lettres={this.state.lettres} cliquer={this.handleClickClavier}/>
      <button onClick={this.newGame}>Commencer le jeu</button>
      <h3>{this.state.vie}</h3>
      <p>Lettre utilisés : {this.state.propose}</p>
    </div>
    )
  }
}
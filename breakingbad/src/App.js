import React from 'react';
import { BrowserRouter as Router, Route, Switch } from "react-router-dom";
import Home from './pages/Home';
import Character from './pages/CharacterPage';
import Navbar from './components/Navbar/Navbar';

const App = () => {

    return(
      <div className="App">
      <Router>
       <Navbar/>
        <Switch>
          <Route path="/" exact component={() => <Home/>} />
          <Route path="/details" exact component={() => <Character/>} />
          
        </Switch>
        
      </Router>
    </div>
    );
}


export default App;

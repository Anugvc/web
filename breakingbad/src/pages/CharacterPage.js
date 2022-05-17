import React from 'react';
import Details  from '../components/CharacterDetails';
import './CharacterPage.css';
import Quotes from '../components/Quotes';

function Character(){
    return(
        
        <div class="body-container">
            <div className="character-container">
              
           <Details/>
          
        </div>
            <Quotes/>
        </div>
        
        
    )
}

export default Character;
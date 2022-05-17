import React from 'react';
import CharacterTable  from '../components/CharacterTable';
import HeroSection from '../components/HeroSection';
import './Home.css';

function Home(){
    return(
        
        <div className="home-container">
            <HeroSection/>
            <CharacterTable/>
        </div>
        
    )
}

export default Home;
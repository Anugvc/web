import React, { useEffect, useState } from 'react';
import { useLocation } from 'react-router';
import axios from 'axios';
import 'bootstrap/dist/css/bootstrap.min.css';
import './CharacterDetails.css';
import { Container } from 'react-bootstrap';








const Details = () => {
  
  let location = useLocation();
  const id = location.state.id;
  
 




  const [character, setCharacter] = useState([]);
  

  const getApi = async () => {

    try {
      const data = await axios.get("https://breakingbadapi.com/api/characters/" + id);
      
      
      setCharacter(data.data);
    } catch (e) {
      console.log(e);
    }
  };
 

  
  useEffect(() => {
    getApi();
  }, []);

const charName=character;

  return (
    <div className="details-container">
      {character.map((item) => (
        
        <Container>
          <figure className="position-relative">

            <img src={item.img} alt="Avatar" width="400" height="600" className="img-fluid" />
            <figcaption>
              <text style={{ fontWeight: "bold", color: "white" }}>Name: </text> {item.name}<br />
              <text style={{ fontWeight: "bold", color: "white" }}>Date of Birth: </text> {item.birthday}<br />
              <text style={{ fontWeight: "bold", color: "white" }}>Occupation: </text> {item.occupation.map(occupation => (
                <text > {occupation}<br/></text> 
              ))}
              <text style={{ fontWeight: "bold", color: "white" }}>Status: </text>: {item.status} <br />
              <text style={{ fontWeight: "bold", color: "white" }}>Nickname: </text>: {item.nickname} <br />
              {/* {!!(item.nickname) ? item.nickname : '<text style={{ fontWeight: "bold", color: "cyan" }}>Nickname: </text> ' + item.nickname}<br /> */}
              <text style={{ fontWeight: "bold", color: "white" }}>Portrayed By: </text> {item.portrayed}<br />
              <text style={{ fontWeight: "bold", color: "white" }}>Seasons Appeared: <br/></text> {item.appearance.map(season => (
                <text style={{ fontWeight: "bold" }}> {season}</text>
              ))}
            </figcaption>

          </figure>

        </Container>
      ))}

            
    </div>

  );

}

export default Details;
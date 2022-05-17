import React, { useEffect, useState } from 'react';
import { useLocation } from 'react-router';
import axios from 'axios';
import './Quotes.css'


const Quotes = () => {

  let location = useLocation();
  var name = location.state.charName;





  
  const [quote, setQuote] = useState([]);


  const getApi = async () => {

    try {
      const data = await axios.get("https://breakingbadapi.com/api/quotes/");

      var quoteData = (data.data);
      setQuote(quoteData);

    } catch (e) {
      console.log(e);
    }
  };

  useEffect(() => {
    getApi();
  }, []);


  return (
    <div className="quote-container">

      <h3>Quotes:<br /><br /></h3>

      <div>
        {quote.map(item => (
          item.author === name ?
            <div className="internal">

              <li>{item.quote} <br /><br /></li>


            </div> :
            <div className="external">

            </div>
        ))
        }


      </div>



    </div>
  )

}
export default Quotes;
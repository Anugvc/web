import React from 'react';
import {
  Nav,
  NavLink,
  // Bars,
  NavMenu,
  
} from './NavbarElements';
  
const Navbar = () => {
  return (
    <>
      <Nav>
        {/* <Bars /> */}
  
        <NavMenu>
          <NavLink to='/' activeStyle>
            <h3 style={{color: 'white' , fontSize: 25, fontStyle: 'normal', opacity:'0.5'}}>HOME</h3>
          </NavLink>
          
          
          {/* Second Nav */}
          {/* <NavBtnLink to='/sign-in'>Sign In</NavBtnLink> */}
        </NavMenu>
       
      </Nav>
    </>
  );
};
  
export default Navbar;
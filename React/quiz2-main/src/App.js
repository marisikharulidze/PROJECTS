import { BrowserRouter as Router, Link, Route, Routes } from "react-router-dom";
import DisplayFavorites from "./Components/DisplayFavorites";
import DisplayJokes from './Components/DisplayJokes'

const  App = () => {
  return (
     
      <Router>

          <div >
            <Link to="/favorites">favorites</Link>
            <br></br>
            <Link to="/jokes">back</Link>
          </div>
        <Routes>
          <Route  path="/jokes" element={ <DisplayJokes/> } />
          <Route path="/favorites" element={ <DisplayFavorites/>} />
        </Routes>
      </Router>
      

  );
}

export default App;

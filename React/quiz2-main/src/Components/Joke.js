import { useEffect, useState } from "react";
import { useDispatch, useSelector } from "react-redux";
import { addFavJoke, remove, change } from "../actions/actions";

const Joke = ({joke}) => {

    const [editMode, setEditMode] = useState(false)
    const [editJoke, setEditJoke] = useState();
    const dispatch = useDispatch();
    const favorites = useSelector(state => state.favorites)
    
    const Delete = () => {
        dispatch({
            type: remove,
            payload: joke
    })
    }
    const setFavorite = () => {
        if(!favorites.some(item => item.joke === joke.joke)){
            dispatch({
                type: addFavJoke,
                payload: joke
            })
        }
    }
    const Save = () => {
        dispatch({
            type: change,
            payload: {
                joke: joke,
                newText: editJoke
            }
        })

    setEditMode(false)
    }

    useEffect(() => {
        setEditJoke(joke.joke)
    }, [joke.joke])

    return (
        editMode 
        ? 
            <div style={{
                marginTop: "15px",
                marginBottom: "15px"
            }}>
                <input 
                    type="text" 
                    value={editJoke} 
                    onChange={event => setEditJoke(event.target.value)}
                />
                <button onClick={() => { setEditJoke(joke.joke); setEditMode(false)}}>cancel</button>
                <button onClick={Save}>Save</button>
            </div>
        : 
            <div>
                <h3>
                    {joke.joke}
                </h3>
                <button onClick={setFavorite}>Add To Favorites</button>
                <button onClick={() => setEditMode(true)}>Update</button>
                <button onClick={Delete}>Delete</button>
            </div>
    )
}

export default Joke;
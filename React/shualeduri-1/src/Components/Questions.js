import {useState,useEffect} from 'react'
import './questions.css'


const Questions = () =>{

    const [data,setData] = useState([])
    const [category,setCategory] = useState('')
    const [numberOfQuestions,setNumberOfQuestions] = useState(0)
    const [selectedNumber,setSelectedNumber] = useState(3)
    const [selectedQuestion,setSelectedQuestion] = useState('general knowledge')

    useEffect(()=>{
        const link = `https://opentdb.com/api.php?amount=${selectedNumber}&category=${selectedQuestion}`
        fetch(link).then(res => res.json()).then(
            data => {
                setData(data)
                console.log(data)
            }).catch(e=>{
                console.log('data not found')
            })
    },[selectedNumber])

    const handleClick=()=>{
        setSelectedNumber(document.getElementById('1'). selectedOptions[0].value)
        console.log(selectedNumber)
        if(document.getElementById('2'). selectedOptions[0].value === 'general knowledge'){
            setSelectedQuestion(9)
        }else if(document.getElementById('2'). selectedOptions[0].value === 'entertaiment:books'){
            setSelectedQuestion(10)
        }else if(document.getElementById('2'). selectedOptions[0].value === 'entertaiment:films'){
            setSelectedQuestion(11)
        }
        console.log(selectedQuestion)
    }

    return(
        <div className='container'>
            <div className='Choice'>
                select number of questions:
                <form>
                    <label>
                        <select id='1'>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                            <option>11</option>
                        </select>
                    </label>
                </form>
                <br/><br/>
                select category:
                <form>
                    <label>
                        <select id='2'>
                            <option>general knowledge</option>
                            <option>entertaiment:books</option>
                            <option>entertaiment:films</option>
                        </select>
                    </label>
                </form>
                <br/><br/>
                <button onClick={()=>{handleClick()}}>Submit</button>
            </div>
            <div className='Test'>

            </div>
        </div>
    )

    
}

export default Questions
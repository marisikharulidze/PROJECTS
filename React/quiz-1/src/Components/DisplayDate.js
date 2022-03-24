import react,{useState,useEffect} from 'react'
import './DisplayData.css'
const DisplayData = () =>{

    const [data,setData] = useState([])
    const [link,setLink] = useState('https://random-data-api.com/api/beer/random_beer?size=5')

    useEffect(()=>{
        let url = `${link}`
        fetch(url).then(res => res.json()).then(
            data => {
                setData(data)
                console.log(data)
            }).catch(e=>{
                console.log('data not found')
            })
    },[link])
    
    return(
        <>
        <div className='box'>
            {data.map((val)=>{ 
                return(
                    <div className='what' key={val.id}>
                        <div>
                        uid: {val.uid}
                        </div>

                    </div>
                )
            })}
        </div>
        <div className='buttons-container'>
            <div onClick={()=>{setLink('https://random-data-api.com/api/beer/random_beer?size=5')}}  className='button'>link 1</div>
            <div onClick={()=>{setLink('https://random-data-api.com/api/cannabis/random_cannabis?size=5')}} className='button'>link 2</div>
            <div onClick={()=>{setLink('https://random-data-api.com/api/coffee/random_coffee?size=5')}} className='button'>link 3</div>
            <div onClick={()=>{setLink('https://random-data-api.com/api/company/random_company?size=5')}} className='button'>link 4</div>
            <div onClick={()=>{setLink('https://random-data-api.com/api/users/random_user?size=5')}} className='button'>link 5</div>
            <div onClick={()=>{setLink('https://random-data-api.com/api/address/random_address?size=5')}} className='button'>link 6</div>
            <div  className='button'>random</div>
        </div>
        </>
    )
}

export default DisplayData
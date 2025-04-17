import { Link } from '@inertiajs/react'
import Header from './Header'

export default function Main({categories}){
    //console.log(categories);
    return (
        <>
        <Header />
        <div>
            {categories.map(category=>(
                <div key={category.id}>
                    
                    <a href={route('review.index', {category_id: category.id})}><img src={category.image} alt=""></img>{category.title}</a>
                </div>
            ))}
        </div>
        </>
    );
}
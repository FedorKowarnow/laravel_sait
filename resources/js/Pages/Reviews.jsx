import { Link } from '@inertiajs/react'
import Header from './layouts/Header'
import Footer from './layouts/Footer'

export default function Reviews({reviews}){
    //console.log(reviews);
    //Разобраться с link в пагинации!!!
    return (
        <>
            <Header />
            <div>
                <a href={route('review.create')} className="btn btn-primary">Написать обзор</a>
            </div>
            <div>
                {reviews.data.map(review=>(
                    <div key={review.id}>
                        <a href={route('review.show', review.id)}>{review.id}:{review.title}</a>
                        <p>"Обзор создал: " {review.user.name}</p>
                    </div>
                ))}  
            </div>
            <div className="py-12 px-4">
                {reviews.links.map((link)=>(
                    <a 
                        key={link.label} 
                        href={link.url} 
                        dangerouslySetInnerHTML={{__html: link.label}}
                        
                    />
                ))}
            </div>
            <Footer />
        </>
    );
}



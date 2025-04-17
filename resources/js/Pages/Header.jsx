
import { Link } from '@inertiajs/react';
export default function Header(){
    return (
        <>
        <nav className="navbar navbar-expand-lg bg-body-tertiary">
                <div className="container-fluid">
                  <div className="collapse navbar-collapse" id="navbarNav">
                    <ul className="navbar-nav">
                      <li className="nav-item">
                        <a className="nav-link active" aria-current="page" href={route('main')}>Главная</a>
                      </li>
                      <li className="nav-item">
                        <a className="nav-link" href={route('category.index')}>Обзоры</a>
                      </li>
                      
                      <li className="nav-item">
                        <a className="nav-link" href={route('register')}>Регистрация</a>
                      </li>
                      <li className="nav-item">
                        <a className="nav-link" href={route('login')}>Вход</a>
                      </li>
                      <li className="nav-item">
                        <a className="nav-link" href={route('home')}>Кабинет пользователя</a>
                      </li>
                      <li className="nav-item dropdown">
                        <Link className="nav-link" method="post" href={route('exit')}>
                          <a>Выход</a>
                        </Link>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
        </>
    );
}
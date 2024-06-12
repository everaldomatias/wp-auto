import React from 'react'
import './style.scss'

const Header = () => {
    return (
        <div className="header">
            <div>
                <span className="logo">Logo</span>
            </div>
            <div>
                <span className="name">Nome</span>
                <span className="car">Gol BX 1984</span>
            </div>
        </div>
    )
}

export default Header
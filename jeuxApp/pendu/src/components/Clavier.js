import React from 'react'

export default function Clavier({lettres,cliquer}) {

  return (
    <div>
      {lettres.map(function(lettres,key)
      {
        return <button onClick={() => cliquer(lettres)} className={lettres+key+ "btn btn-danger"}  key={key}>{lettres}</button>
      }
    )}
    </div>
  )
}

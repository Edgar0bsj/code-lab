import Quadradinho from "./Quadradinho";
import {propsTabuleiro} from "./Interface"
import styles from "./styles/linha.module.css"

const Linha = (props:propsTabuleiro) => {
    return (
        <div className={styles.linha}>
            <Quadradinho preta={props.preta} />
            <Quadradinho preta={!props.preta} />
            <Quadradinho preta={props.preta} />
            <Quadradinho preta={!props.preta} />
            <Quadradinho preta={props.preta} />
            <Quadradinho preta={!props.preta} />
            <Quadradinho preta={props.preta} />
            <Quadradinho preta={!props.preta} />

        </div>
    )

};

export default Linha;
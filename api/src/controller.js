import { pool } from "./database.js";

class UserController{
    async getAll(req, res){
        try{
            const [result] = await pool.query('SELECT * FROM usuarios');
            res.json(result);
        }catch(error){
            console.log(error);
            res.status(500).json({"Error": "Ocurrio un error al obtener los usuarios"});
        }
    }

    async getOne(req, res){
        try{
            const user = req.params;
            const [result] = await pool.query(`SELECT * FROM Usuarios WHERE id_usuario=(?)`, [user.id_usuario]);
            if (result.length > 0) {
                res.json(result[0]);
            } else {
                res.status(404).json({"Error": `No se encontró el usuario con ese id`});
            }
        }catch(error){
            console.log(error);
            res.status(404).json({error: 'id inexistente'});
        }
    }
    
    async add(req, res){
        try{
            const user = req.body;
            if (!user.nombre || !user.apellido || !user.usuario || !user.email || !user.pass) {
                res.status(400).json({ "Error": "Por favor, completa todos los campos obligatorios" });
                return;
            }
            const [result] = await pool.query(`INSERT INTO Usuarios(nombre, apellido, usuario, email, pass) VALUES (?, ?, ?, ?,?)`, [user.nombre, user.apellido, user.usuario, user.email, user.pass]);
            res.json({"Id insertado": result.insertId});
        }catch(error){
            console.log(error);
            res.status(500).json({ "Error": "Ocurrió un error al agregar el usuario" });
        }
    }

    async delete(req, res){
        try{
            const user = req.body;
            const [result] = await pool.query(`DELETE FROM Usuarios WHERE id_usuario=(?)`, [user.id_usuario]);
            if (result.affectedRows > 0) {
                res.json({"Registros eliminados": result.affectedRows})
            } else {
                res.status(404).json({"Error": `No se encontró ningún usuario con ese id`});
            }
        }catch(error){
            console.log(error);
            res.status(500).json({"Error": "Ocurrió un error al eliminar el usuario"});
        }
    }

    async update(req, res){
        try{
            const user = req.body;
            const [result] = await pool.query(`UPDATE Usuarios SET nombre=(?), apellido=(?), usuario=(?), email=(?), pass=(?) WHERE id_usuario=(?)`, [user.nombre, user.apellido, user.usuario, user.email, user.pass, user.id_usuario]);
            res.json({"Registros actualizados": result.changedRows});
        }catch(error){
            console.log(error);
            res.status(500).json({"Error": "Ocurrió un error al actualizar el usuario"});
        }
    }
}

export const user = new UserController();
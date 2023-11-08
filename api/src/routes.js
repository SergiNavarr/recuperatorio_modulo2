import { Router } from 'express';
import { user } from './controller.js';

export const router = Router();

router.get('/usuarios', user.getAll);
router.get('/usuario/:id_usuario', user.getOne);
router.post('/usuario', user.add);
router.delete('/usuario', user.delete);
router.put('/usuario', user.update);
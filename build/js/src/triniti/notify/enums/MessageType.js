import Enum from '@gdbots/common/Enum';

export default class MessageType extends Enum {
}

MessageType.configure({
  UNKNOWN: 'unknown',
  ARTICLE: 'article',
  VIDEO: 'video',
  GALLERY: 'gallery',
  GENERAL: 'general',
}, 'triniti:notify:message-type');
